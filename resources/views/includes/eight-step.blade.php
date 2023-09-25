<fieldset>
    <div class="form-container">
        <div class="row p-3 text-left">
            <div class="col-md-6">
                {!!Form::label('image_signature', 'Select Your Signature Type',['class' => 'required-star'])!!}
                {!!Form::select('signature_status', ['Digital Signature' => 'Digital Signature', 'Image Signature' => 'Image Signature'],'',['class' => 'form-control','placeholder'=> '---', 'id' => 'signatureStatus']) !!}
            </div>
            <div class="col-md-6 form-group digital-signature">
                {!! Form::label('', 'Add your Signature', ['class' => 'required']) !!}
                <div class="signature-container">
                    <div class="canvas-container">
                        <input type="hidden" name="signatureImage" id="signature-image-input" />
                        <canvas id="signature-canvas"></canvas>
                    </div>
                    <label style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none;
                    border-radius: 4px; cursor: pointer;" id="clear-button">Clear</label>
                </div>
            </div>
            <div class="col-md-6 img-signature">
                <div class="form-group">
                    {!! Form::label('signature_photo', 'Signature Photo :') !!}
                    <br>
                    <img class="border border-white img-view" src="{{ url('img/photo.png') }}" height="250" width="100%">

                    <label class="btn btn-block btn-secondary btn-sm rounded-0" style="width: 100%; cursor: pointer">
                        <input class="img-file" type="file" name="signature_photo" style="display: none" accept="image/png,image/jpeg,image/jpg">
                        <i class="fa fa-upload"></i> Upload
                    </label>
                    <span id="photo_err" class="text-danger" style="font-size: 16px;"></span>
                </div>
            </div>
        </div>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <button type="submit" class="submit action-button" target="_top">Submit</button>

</fieldset>
