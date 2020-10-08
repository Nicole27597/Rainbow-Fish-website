/** Validation for checking that radio button have been clicked.
 * Akshay. "How to Create Simple Quiz using PHP and MySQL". technopoints.co.in. 
https://technopoints.co.in/create-simple-quiz-using-php-mysql/ (accessed Oct. 3 & 4, 2020). 
*/
function radioValidation() {
    var uanswer = document.getElementsByName('user_answer');
    var tok;
    for(var i = 0; i < uanswer.length; i++) {
        if(uanswer[i].checked) {
            tok = uanswer[i].nodeValue;
            alert(tok);
        }
    }
}