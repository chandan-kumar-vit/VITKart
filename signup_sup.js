function verify()
{
    var i;
    //No Value Should be empty
    var a,b,c,d,e,f,g,h;
    a=document.forms["myform"]["fname"].value;
    b=document.forms["myform"]["lname"].value;
    c=document.forms["myform"]["regno"].value;
    d=document.forms["myform"]["contact"].value;
    e=document.forms["myform"]["mail"].value;
    f=document.forms["myform"]["procname"].value;
    g=document.forms["myform"]["proccon"].value;
    h=document.forms["myform"]["pass"].value;
    if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='' || h=='')
    {
        alert("No Field should be EMPTY!!");
    }
    //name
    var nf=0;
    var alen=a.length;
    var blen=b.length;
    for(i=0;i<alen;i++)
    {
        if(isNaN(a.charAt(i)))
        {i++;}
        else{
            nf=1;
        }
    }
    for(i=0;i<blen;i++)
    {
        if(isNaN(b.charAt(i)))
        {
            i++;
        }
        else{
            nf=1;
        }
    }

    if(nf==1){
        alert("Invalid Name");
    }
    //Registration Number
    var clen=c.length;
    if(clen!=9)
    {
        alert("Invalid Registration Number");
    }
   
    for(i=0;i<2;i++)
    {
        if(isNaN(c.charAt(i)))
        {
            alert("Invalid Registration Number");
        }
        
    }
    for(i=2;i<5;i++)
    {
        if(isNaN(c.charAt(i)))
        {
            i++;
        }
        else{
            alert("Invalid Registration Number");
        }
    }
    for(i=5;i<9;i++)
    {
        if(isNaN(c.charAt(i)))
        {
            alert("Invalid Registration Number");
        }
    }

    //Contact Number
    var dlen=d.length;
    if(dlen<10){
        alert("Invalid User Contact Number");
    }
    for(i=0;i<10;i++)
    {
        if(isNaN(d.charAt(i)))
        {
            alert("Invalid User Contact Number");
        }
    }

    //email
    var atposition=e.indexOf("@");  
    var dotposition=e.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Incorrect Email");  
          
     }
      
    //proctor contact

    var glen=g.length;
    if(glen!=10){
        alert("Invalid Proctor Contact Number");
    }
    for(i=0;i<10;i++)
    {
        if(isNaN(g.charAt(i)))
        {
            alert("Invalid Proctor Contact Number");
        }
    }

    // hostel
    var gen=document["myform"]["gender"].checked;
    var hos=document["myform"]["hostelblock"].value;
    if(gen=='female'){
        if(hos!=b)
        {
            alert("Wrong Hostel Block");
        }
    }
    
    //password
    var hlen=h.length;
    var repas=document.forms["myform"]["repass"].value;
    var repasslen=repas.length;
    if(repas=='')
    {
        alert("Password NOT Matched");
    }
    if(hlen!=repasslen)
    {
        alert("Password Not Matched");
    }
    var flag=0;
    for(i=0;i<hlen;i++)
    {
        if(h.charAt(i)!=repas.charAt(i))
        {
            flag=1;
        }
    }
    if(flag==1){
        alert("Password NOT Matched");
    }
}