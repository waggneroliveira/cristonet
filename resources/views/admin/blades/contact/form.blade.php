<div class="container">
    <div class="row">
        {{-- Sessão --}}
        <div class="col-12 mb-4">
            <h4 class="page-title">Informações da sessão</h4>
            <div class="card card-body">
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <label for="name_section" class="form-label">Nome da sessão</label>
                        <input type="text" name="name_section" class="form-control" id="name_section"
                            value="{{ $contact->name_section ?? '' }}" placeholder="Nome da sessão">
                    </div>
                    <div class="col-12 col-md-8">
                        <label for="text" class="form-label">Texto</label>
                        <input type="text" name="text" class="form-control" id="text"
                            value="{{ $contact->text ?? '' }}" placeholder="Texto">
                    </div>
                    <div class="col-12">
                        <label for="maps" class="form-label">Link mapa</label>
                        <input type="text" name="maps" class="form-control" id="maps"
                            value="{{ $contact->maps ?? '' }}" placeholder="Mapa">
                    </div>
                </div>
            </div>
        </div>

        {{-- Redes sociais --}}
        <div class="col-12 mb-4">
            <h4 class="page-title">Informações das redes sociais</h4>
            <div class="card card-body">
                <div class="row g-3">
                    <div class="col-12 col-md-3">
                        <label for="phone" class="form-label">WhatsApp</label>
                        <input type="text" name="phone_one" class="form-control" id="phone"
                            value="{{ $contact->phone_one ?? '' }}" placeholder="WhatsApp">
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="mention" class="form-label">Menção</label>
                        <input type="text" name="mention" class="form-control" id="mention"
                            value="{{ $contact->mention ?? '' }}" placeholder="Menção">
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="link_insta" class="form-label">Link Instagram</label>
                        <input type="text" name="link_insta" class="form-control" id="link_insta"
                            value="{{ $contact->link_insta ?? '' }}" placeholder="Link Instagram">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

