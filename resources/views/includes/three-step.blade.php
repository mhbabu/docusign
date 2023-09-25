<fieldset>
    <h3 class="text-uppercase">All AIA Models are legal adults</h2>
        <div class="form-container">
            <div class="row text-left p-3">
                <div class="col-md-12 form-group">
                    {!! Form::label('over_eighteen', 'Are you over the age of 18?', ['class' => 'required-star']) !!} <br>
                    <div class="form-check form-check-inline ml-3">
                        <input class="form-check-input" type="radio" name="over_eighteen" id="overEghiteenYes" value="Yes" />
                        <label class="form-check-label" for="overEghiteenYes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="over_eighteen" id="overEghiteenNo" value="No" />
                        <label class="form-check-label" for="overEghiteenNo">No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('imageFileOfId', "Submit form of ID: Passport or Driver’s Licence for Proof of Age", ['class' => 'required-star']) !!}
                        <br>
                        <img class="border border-white img-view" src="{{ url('img/photo.png') }}" height="250" width="100%" />
                        <label class="btn btn-block btn-secondary btn-sm rounded-0" style="width: 100%; cursor: pointer">
                            <input class="img-file" type="file" name="imageFileOfId" style="display: none" accept="image/png,image/jpeg,image/jpg">
                            Upload
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('imageBackOfId', 'We must also have a picture of the back of your ID', ['class' => 'required-star']) !!}
                        <br>
                        <img class="border border-white img-view" src="{{ url('img/photo.png') }}" height="250" width="100%" />
                        <label class="btn btn-block btn-secondary btn-sm rounded-0" style="width: 100%; cursor: pointer">
                            <input class="img-file" class="file" type="file" name="imageBackOfId" style="display: none" accept="image/png,image/jpeg,image/jpg">
                            Upload
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
