<div class="modal fade" id="jobModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Присоединяйся к команде PageBlocks</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {'!FetchIt' | snippet : [
                'snippet' => 'FormIt',
                'form' => 'jobForm',
                'hooks' => 'FormItSaveForm,email',

                'emailTpl' => 'jobEmail',
                'emailSubject' => 'Тема письма',
                'emailTo' => 'Superboshnik@gmail.com',

                'formName' => 'Job',
                'formFields' => 'name,email,message',
                'fieldNames' => 'name==Name,email==Email,message==Message',

                'validate' => 'name:required,email:required,file:required',
                'validationErrorMessage' => 'В форме содержатся ошибки!',
                'successMessage' => 'Сообщение успешно отправлено',
            ]}
        </div>
    </div>
</div>