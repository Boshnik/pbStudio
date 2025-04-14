<?php

namespace PageBlocks\App\Http\Controllers;

use Boshnik\PageBlocks\Facades\Request;
use Boshnik\PageBlocks\Support\Mail;

class FormController extends Controller
{
    public function handle(Request $request)
    {
        // Валидация формы
        $validated = $request->validate([
            'honeypot' => 'empty', // антиспам: поле должно быть пустым
            'formname' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg|min:100|max:2048',
            'message' => 'nullable|string', // необязательное текстовое поле
        ]);

        // Сохраняем файл в папку assets/images/files
        $validated['file'] = $request->file('file')->store('assets/images/files');

        // Добавим IP
        $validated['ip'] = $request->ip();

        // Сохраняем форму в таблицу значений
        $form = $this->modx->newObject(\pbTableValue::class, [
            'model_type' => 'Menu', // Тип модели
            // 'model_type' => 'MODX\Revolution\modDocument', Если таблица в на странице ресурса
            // 'model_type' => 'MODX\Revolution\modUser', Если форма на странице пользователя
            'field_name' => 'forms', // Имя поля таблицы
            'createdon' => time(),
            'values' => json_encode($validated), // Сериализованные данные формы
        ]);

        if (!$form->save()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, 'Не удалось сохранить форму: ' . print_r($validated, true));
        }

        // Отправка письма менеджеру
        Mail::to('Superboshnik@gmail.com')
            ->subject('Отправка резюме')
            ->view('chunks/email/manager', $validated)
            ->attach($validated['file'])
            ->send();

        // Отправка письма пользователю
        Mail::send($validated['email'], 'Ваше резюме принято', 'Мы скоро с вами свяжемся!');
        // или через хелпер:
        // mail($validated['email'], 'Ваше резюме принято', 'Мы скоро с вами свяжемся!');

        // Если запрос был через AJAX — возвращаем JSON
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Форма успешно отправлена',
                // 'redirect' => '/contacts', Если нужен редирект
            ]);
        }

        // В противном случае — редирект
        return response()->redirect('/contacts');
    }
}
