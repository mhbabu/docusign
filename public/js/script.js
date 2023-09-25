
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches


// Validation function for the first step
function validateStep1() {
    // return true;

    // Check if at least one checkbox is selected
    var checkboxes = $("input[name='pornstar'], input[name='cam_model'], input[name='social_media_star'], input[name='magazine_model'], input[name='other']");
    if (!checkboxes.is(":checked")) {
        alert("Please select at least one option.");
        return false;
    }

    // Add other validations for the fields in step 1 here if needed
    var name = $("input[name='name']").val();
    var stageName = $("input[name='stage_name']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var nationality = $("input[name='nationality']").val();
    var age = $("input[name='age']").val();
    var dob = $("input[name='dob']").val();
    // var maritalStatus = $("select[name='marital_status']").val();
    var ethnicity = $("select[name='ethnicities']").val();

    // Check if any of the required fields are empty
    if (name === "" || stageName === "" || email === "" || phone === "" || nationality === "" || age === "" || ethnicity === "") {
        alert("Please fill in all the required fields.");
        return false;
    }
    return true;
}

// Validation function for the second step
function validateStep2() {
    // return true;
    
    var foreign_model = $("input[name='foreign_model']");
    if (!foreign_model.is(":checked")) {
        alert("Please select the foreign model option.");
        return false;
    }
    var medeled_before = $("input[name='medeled_before']");
    if (!medeled_before.is(":checked")) {
        alert("Please select you have modeled before or not.");
        return false;
    }
    var base_city = $("input[name='base_city']").val();
    if (base_city === "") {
        alert("Please write your base city.");
        return false;
    }
    var model_base_city = $("input[name='model_base_city']");
    if (!model_base_city.is(":checked")) {
        alert("Please select do you model in your base city or not.");
        return false;
    }
    var availability_base_city = $("input[name='availability_base_city']");
    if (!availability_base_city.is(":checked")) {
        alert("Please select availability in base city.");
        return false;
    }
    var travel_often = $("input[name='travel_often']");
    if (!travel_often.is(":checked")) {
        alert("Please select do you travel often or not.");
        return false;
    }
    var model_tour = $("input[name='model_tour']");
    if (!model_tour.is(":checked")) {
        alert("Please select the model tour option.");
        return false;
    }
    var adult_film_star = $("input[name='adult_film_star']");
    if (!adult_film_star.is(":checked")) {
        alert("Please select are you an adult film star or not.");
        return false;
    }

    return true;
}

// Validation function for the third step
function validateStep3() {
    
    var over_eighteen = $("input[name='over_eighteen']:checked").val();

    if (over_eighteen !== "Yes") {
        alert("Please confirm that you are over 18.");
        return false;
    }

    var imageFileOfId = $("input[name='imageFileOfId']")[0].files;
    if (imageFileOfId.length === 0) {
        alert("Please submit your ID (Passport or Driver’s Licence) for proof of age.");
        return false;
    }

    var imageBackOfId = $("input[name='imageBackOfId']")[0].files;
    if (imageBackOfId.length === 0) {
        alert("Please submit a picture of the back of your ID.");
        return false;
    }

    return true;
}

function validateStep4() {
    // return true;
    
    var height = $("input[name='height']").val();
    var weight = $("input[name='weight']").val();
    var bustSize = $("input[name='bust_size']").val();
    var cupSize = $("input[name='cup_size']").val();
    var waist = $("input[name='waist']").val();
    var hips = $("input[name='hips']").val();
    var hairColor = $("input[name='hair_color']").val();
    var eyeColor = $("select[name='eye_color']").val();
    // var tatoos = $("select[name='tatoos']").val();

    // Check if any of the required fields are empty
    if (height === "" || weight === "" || bustSize === "" || cupSize === "" || waist === "" || hips === "" || hairColor === "" || eyeColor === "") {
        alert("Please fill in all the required fields.");
        return false;
    }
    return true;
}
function validateStep5() {
    // return true;

    var mins_30 = $("input[name='mins_30']").val();
    var hour_1 = $("input[name='hour_1']").val();
    var mins_90 = $("input[name='mins_90']").val();
    var hours_2 = $("input[name='hours_2']").val();
    var hours_3 = $("input[name='hours_3']").val();
    var hours_4 = $("input[name='hours_4']").val();
    var hours_5 = $("input[name='hours_5']").val();
    var overnight_8_hours = $("select[name='overnight_8_hours']").val();
    var overday_8_hours = $("select[name='overday_8_hours']").val();

    // Check if any of the required fields are empty
    if (mins_30 === "" || hour_1 === "" || mins_90 === "" || hours_2 === "" || hours_3 === "" || hours_4 === "" || hours_5 === "" || overnight_8_hours === "" || overday_8_hours === "") {
        alert("Please fill in all the required fields.");
        return false;
    }
    return true;
}

function validateStep6() {
    // return true;

    var checkboxes = $("input[name='men'], input[name='women'], input[name='couple'], input[name='transgender']");
    if (!checkboxes.is(":checked")) {
        alert("Please select at least one checkbox.");
        return false;
    }

    // Add other validations for the fields in step 1 here if needed
    var primary_focus = $("input[name='primary_focus']").val();
    var secondary_focus = $("input[name='secondary_focus']").val();
    var entertain = $("input[name='entertain']").val();
    var racial_objections = $("input[name='racial_objections']").val();

    // Check if any of the required fields are empty
    if (primary_focus === "" || secondary_focus === "" || entertain === "" || racial_objections === "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    var image_multiple = $("input[name='image_multiple']")[0].files;
    if (image_multiple.length === 0) {
        alert("Please upload at least 5 photos.");
        return false;
    }

    return true;
}

function validateStep7() {
    return true;
}

function validateStep8() {
    return true;
}


$(".next").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    // Validate the current step before proceeding
    var isValid = false;
    if ($("fieldset").index(current_fs) === 0) {
        isValid = validateStep1();
    } else if ($("fieldset").index(current_fs) === 1) {
        isValid = validateStep2();
    } else if ($("fieldset").index(current_fs) === 2) {
        isValid = validateStep3();
    } else if ($("fieldset").index(current_fs) === 3) {
        isValid = validateStep4();
    } else if ($("fieldset").index(current_fs) === 4) {
        isValid = validateStep5();
    } else if ($("fieldset").index(current_fs) === 5) {
        isValid = validateStep6();
    } else if ($("fieldset").index(current_fs) === 6) {
        isValid = validateStep7();
    } else if ($("fieldset").index(current_fs) === 7) {
        isValid = validateStep8();
    }

    if (!isValid) {
        animating = false;
        return;
    }

    // Activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    // Show the next fieldset
    next_fs.show();
    // Hide the current fieldset with style
    current_fs.animate(
        { opacity: 0 },
        {
            step: function (now, mx) {
                // As the opacity of current_fs reduces to 0 - stored in "now"
                // 1. Scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                // 2. Bring next_fs from the right(50%)
                left = now * 50 + "%";
                // 3. Increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    transform: "scale(" + scale + ")",
                    position: "absolute",
                });
                next_fs.css({ left: left, opacity: opacity });
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            // This comes from the custom easing plugin
            easing: "easeInOutBack",
        }
    );
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});


// Image Upload
document.addEventListener("DOMContentLoaded", function() {
    const imageInput = document.getElementById("image-input");
    const imagePreview = document.getElementById("image-preview");

    imageInput.addEventListener("change", function() {
        const files = Array.from(imageInput.files);

        if (files.length > 30 || files.length < 10) {
            alert("Please upload between 10 and 30 images.");
            imageInput.value = "";
            return;
        }

        imagePreview.innerHTML = "";

        files.forEach(file => {
            const reader = new FileReader();
            const imagePreviewItem = document.createElement("div");
            imagePreviewItem.classList.add("image-preview-item");

            reader.onload = function(event) {
                const image = new Image();
                image.src = event.target.result;
                imagePreviewItem.appendChild(image);
            };

            reader.readAsDataURL(file);
            imagePreview.appendChild(imagePreviewItem);
        });
    });
});
// End Image Upload

$(document).ready(function () {
    const canvas = document.getElementById("signature-canvas");
    const clearButton = document.getElementById("clear-button");
    const signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function () {
        signaturePad.clear();
    });

    // Add a function to convert the signature to an image and send it to a hidden input field
    const signatureToImageInput = document.getElementById("signature-image-input");
    
    // Listen to form submission
    const submitButton = document.querySelector(".submit");
    submitButton.addEventListener("click", function () {
        const signatureImage = signaturePad.toDataURL(); // Convert signature to image
        signatureToImageInput.value = signatureImage; // Set the value of a hidden input
    });
});
