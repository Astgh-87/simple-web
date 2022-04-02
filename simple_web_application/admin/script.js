function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var fname = document.getElementById("fname_row"+no);
 var lname = document.getElementById("lname_row"+no);
 var age   = document.getElementById("age_row"+no);
 var email = document.getElementById("email_row"+no);
 var phone = document.getElementById("phone_row"+no);
  
 var fname_data = fname.innerHTML;
 var lname_data = lname.innerHTML;
 var age_data   = age.innerHTML;
 var email_data = email.innerHTML;
 var phone_data = phone.innerHTML;
 
  
 fname.innerHTML="<input type='text' id='fname_text"+no+"' value='"+fname_data+"'>";
 lname.innerHTML="<input type='text' id='lname_text"+no+"' value='"+lname_data+"'>";
 age.innerHTML="<input type='text' id='age_text"+no+"' value='"+age_data+"'>";
 email.innerHTML="<input type='text' id='email_text"+no+"' value='"+email_data+"'>";
 phone.innerHTML="<input type='text' id='phone_text"+no+"' value='"+phone_data+"'>";
}

function save_row(no)
{
 var fname_val = document.getElementById("fname_text"+no).value;
 var lname_val = document.getElementById("lname_text"+no).value;
 var age_val   = document.getElementById("age_text"+no).value;
 var email_val = document.getElementById("email_text"+no).value;
 var phone_val = document.getElementById("phone_text"+no).value;

 document.getElementById("fname_row"+no).innerHTML = fname_val;
 document.getElementById("lname_row"+no).innerHTML = lname_val;
 document.getElementById("age_row"+no).innerHTML   = age_val;
 document.getElementById("email_row"+no).innerHTML = email_val;
 document.getElementById("phone_row"+no).innerHTML = phone_val;


 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}
