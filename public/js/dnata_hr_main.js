



// employee photo uploading
$(document).ready(function () {


    //=================BROWSE PHOTO=================
    $('#browse_file').on('click',function () {
        $('#photo').click();
    })

    $('#photo').on('change',function (e) {
        showFile(this,'#showPhoto');

    })


    $('#browse_profile_file').on('click',function () {
        $('#profile_photo').click();
    })


    $('#profile_photo').on('change',function (e) {
        showFile(this,'#showProfilePhoto');

    })




    //================END PHOTO BROWSE==============
    //==============SHOW PHOTO======================
    function showFile(fileinput,img,showName) {
        if (fileinput.files[0]){
            var reader=new FileReader();
            reader.onload=function (e) {
                $(img).attr('src',e.target.result);

            }
            reader.readAsDataURL(fileinput.files[0]);
        }
        $(showName).text(fileinput.files[0].name)
    };
    //==============END PHOTO SHOW===================


// //get basic designation modal modal
//     $('#add_designation_button').on('click',function () {
//         $('#add_designation_modal').modal(
//             {
//                 keyboard: false,
//                 backdrop: 'static'
//             }
//         );
//     });
//
//
//
//     // add_designation_button
//     // End of add designation to database
//
//
//     //get the shift modal modal
//     $('#add_shift_button').on('click',function () {
//         $('#add_shift_modal').modal(
//             {
//                 keyboard: false,
//                 backdrop: 'static'
//             }
//         );
//     });





});