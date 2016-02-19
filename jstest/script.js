$(function(){
    /** on click do this: */
    $('#Confirm').click(function(){
        /** Set/return values based on two input boxes,
         * - needs validation -if- on height, height will be static
         * - needs to be able to be used with dates instead of integers
         * */
        $('#Task').css('width',$('#Width').val());
        $('#Task').css('height',$('#Height').val());
        $('#Task').css('border','2px solid black');
    });
    /** needs a kind of functionality to be able to recursively use the function
     * for multiple shapes at once, rather then one */
});


