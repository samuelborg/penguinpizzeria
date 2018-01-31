function verifyEmail()
{
    var x = document.getElementById('email').value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
        alert("Not a valid e-mail address");
        return false;
    }
    return true;

    // src="/js/email-validation.js">
}

function verifyNull()
{
    var isValid = true;
    var phoneno = /^\d{8}$/;
    if(!document.getElementById('name').value.trim().length)
    {
        isValid = false;
        alert('Please enter your name and surname.');
    }
    else if(!document.getElementById('tel').value.trim().length)
    {
        isValid = false;
        alert('Please enter contact number.');
    }
    else if(!document.getElementById('tel').value.match(phoneno))
    {
        isValid = false;
        alert('Number must contain 8 digits.');
    }

    return isValid;
}

function verifyMessage()
{
    var isValid = true;
    if(!document.getElementById('message').value.trim().length)
    {
        isValid = false;
        alert('You forgot to type in your message!!');
    }
    return isValid;

}

function verifyTime()
{
    var isValid = true;

   if(!document.getElementById('no_ppl').value.trim().length)
    {
        isValid = false;
        alert('Please enter how many people you will be.');
    }
    else if(!document.getElementById('date').value.trim().length)
    {
        isValid = false;
        alert('When will you be coming??');
    }
   else if(!document.getElementById('time').value.trim().length)
    {
        isValid = false;
        alert('What time will you be coming?');
    }
    return isValid;
}


function date_valid()
{
    var today, someday;
    someday = document.getElementById("date").value;

    var year,month,day;
    year = someday.substring(0, 4);
    month = someday.substring(5, 7);
    day = someday.substring(8, 10);
    var date1 = new Date(year,month-1,day);

    today = new Date();

    if (date1 < today)
    {
        alert("Date has already passed! Pick another.");
        return false;
    }
        return true;
}
