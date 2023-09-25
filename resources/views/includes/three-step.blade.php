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
                <div class="col-md-12 form-group">
                    <div class="input-group mb-3">
                        {!! Form::label('imageFileOfId', 'Submit form of ID: Passport or Driver’s Licence for Proof of Age', ['class' => 'required-star']) !!}
                        <div class="file">
                            {!! Form::file('imageFileOfId',['accept'=>'image/jpg, image/jpeg, image/png']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    <div class="input-group mb-3">
                        {!! Form::label('imageBackOfId', 'We must also have a picture of the back of your ID', ['class' => 'required-star']) !!}
                        <div class="file">
                            {!! Form::file('imageBackOfId',['accept'=>'image/jpg, image/jpeg, image/png']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
