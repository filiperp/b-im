/**
 * Created by filiperp on 9/1/14.
 */
var FileChooserBehavior;
FileChooserBehavior = (function () {
    'use strict';
    function FileChooserBehavior() {
    }

    FileChooserBehavior.onChange = function ($idChooser, $idHiddenField) {

        $('#'+$idChooser).bind('change',function(){
          //  console.log(this.files)
            if(this.files[0])
                    $('#'+$idHiddenField).val(this.files[0].name)
            else{
                $('#'+$idHiddenField).val(null);
            }
        })
    };

    return FileChooserBehavior;


 })();


