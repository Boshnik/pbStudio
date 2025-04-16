<div class="modal fade" id="jobModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Присоединяйся к команде PageBlocks</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/form/submit" method="post" data-pbform enctype="multipart/form-data">
                <input type="hidden" name="formname" value="Job">
                <input type="hidden" name="honeypot" value="">
                <input type="hidden" name="_token" value="{csrf_token}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="job-name" class="col-form-label">Ваше имя:</label>
                        <input type="text" class="form-control" name="name" id="job-name">
                        <span class="invalid-feedback" data-error="name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-email" class="col-form-label">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="job-email">
                        <span class="invalid-feedback" data-error="email"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-file" class="col-form-label">Резюме (PDF, DOC, DOCX):</label>
                        <input type="file" class="form-control" name="file" id="job-file">
                        <span class="invalid-feedback" data-error="file"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-message" class="col-form-label">Сопроводительное письмо:</label>
                        <textarea class="form-control" name="message" id="job-message"></textarea>
                        <span class="invalid-feedback" data-error="message"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить резюме</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="orderSite" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Заказать сайт</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/form/submit" method="post" data-pbform enctype="multipart/form-data">
                <input type="hidden" name="formname" value="Job">
                <input type="hidden" name="honeypot" value="">
                <input type="hidden" name="_token" value="{csrf_token}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="job-name" class="col-form-label">Ваше имя:</label>
                        <input type="text" class="form-control" name="name" id="job-name">
                        <span class="invalid-feedback" data-error="name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-email" class="col-form-label">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="job-email">
                        <span class="invalid-feedback" data-error="email"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-file" class="col-form-label">Техническое задание (PDF, DOC, DOCX):</label>
                        <input type="file" class="form-control" name="file" id="job-file">
                        <span class="invalid-feedback" data-error="file"></span>
                    </div>
                    <div class="mb-3">
                        <label for="job-message" class="col-form-label">Сопроводительное письмо:</label>
                        <textarea class="form-control" name="message" id="job-message"></textarea>
                        <span class="invalid-feedback" data-error="message"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить резюме</button>
                </div>
            </form>
        </div>
    </div>
</div>