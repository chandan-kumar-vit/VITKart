function validate()
{
    var con,conlen,i;
    con=document.forms["sellfm"]["Contect-no"].value;
    conlen=con.length;
    if(conlen!=10)
    {
        alert("Enter Correct Contact Number");
    }
    for(i=0;i<conlen;i++)
    {
        var x=con.charAt(i);
        if(isNaN(x))
        {
            alert("Enter Correct Contact Number");
        }
    }
}