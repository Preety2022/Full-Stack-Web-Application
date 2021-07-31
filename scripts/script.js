function add_more(){
      var input='<div><input type="text" name="lang" id="lang" class="form-control language" ><br></div>';
     jQuery('.list_lang').append(input);
}

function a(){
   var input='<div><input type="text" name="edu" id="edu" class="form-control education"><br></div>';
     jQuery('.list_edu').append(input);
}

function b(){
   var input='<div><input type="text" id="work" class="form-control"><br></div>';
     jQuery('.list_work').append(input);
}

function c(){
   var input='<div><input type="text" id="skill" class="form-control skillset"><br></div>';
     jQuery('.list_skill').append(input);
}

function d(){
   var input='<div><textarea type="text" id="project" class="form-control project" placeholder="Your Projects..." rows="3"></textarea><br></div>';
     jQuery('.list_pro').append(input);
}

function e(){
   var input='<div><textarea id="certify" class="form-control certificate" placeholder="Mention your certificates" rows="3"></textarea><br></div>';
     jQuery('.list_cert').append(input);
}

<!--create resume-->

function cv(){
       var a= document.getElementById('name').value;
       var b= document.getElementById('role').value;
       var c= document.getElementById('contact').value;
       var d= document.getElementById('url').value;
       var e= document.getElementById('email').value;
       var f= document.getElementById('git').value;
       var g= document.getElementById('objective').value;

       var h= document.getElementById('skill').value;
       var i= document.getElementById('project').value;
       var j= document.getElementById('certify').value;
       var k= document.getElementById('lang').value;

       if(a!='' && b!='' && c!='' && d!='' && e!='' && f!='' && g!='' && h!='' && i!='' && j!='' && k!='' ){


      jQuery('#fillform').hide();
      jQuery('#next_info').hide();
      jQuery('#creater').show();

      var name= document.getElementById('name').value;
      jQuery('#namefilled').append(name);

      var role= document.getElementById('role').value;
      jQuery('#rolefilled').append(role);

      var contact= document.getElementById('contact').value;
      jQuery('#contactfilled').append(contact);

      var url= document.getElementById('url').value;
      jQuery('#urlfilled').append(url);
       var email= document.getElementById('email').value;
      jQuery('#mailfilled').append(email);
       var git= document.getElementById('git').value;
       jQuery('#gitfilled').append(git);
       var object= document.getElementById('objective').value;
       jQuery('#objectfilled').append(object);


 

 //fetching multiple elements by using classname

        var arr= document.getElementsByClassName('skillset');
        var str='';
        for(var e of arr){
            str= str+ `<li> ${e.value} </li>`;
        }
        document.getElementById('skillfilled').innerHTML = str;

        var arr1= document.getElementsByClassName('education');
        var str1='';
        for(var e1 of arr1){
            str1= str1+ `<li> ${e1.value} </li>`;
        }
        document.getElementById('edufilled').innerHTML = str1;

        var arr2= document.getElementsByClassName('project');
        var str2='';
        for(var e2 of arr2){
            str2= str2+ `<li> ${e2.value} </li>`;
        }
        document.getElementById('profilled').innerHTML = str2;

        var arr3= document.getElementsByClassName('certificate');
        var str3='';
        for(var e3 of arr3){
            str3= str3+ `<li> ${e3.value} </li>`;
        }
        document.getElementById('certfilled').innerHTML = str3;

        var arr4= document.getElementsByClassName('language');
        var str4='';
        for(var e4 of arr4){
            str4= str4+ `<li> ${e4.value} </li>`;
        }
        document.getElementById('langfilled').innerHTML = str4;
}
else{
    alert('Please fill the form correctly!');
}
}

function printres(e) {
      var page= document.body.innerHTML;
      var content = document.getElementById(e).innerHTML;
      document.body.innerHTML = content;
      window.print();
      document.body.innerHTML= page;

}

function userpro() {
    jQuery('#fillform').show();
    jQuery('#next_info').hide();
    jQuery('#creater').hide();
}
function more_info(){
    jQuery('#fillform').hide();
    jQuery('#next_info').show();
    jQuery('#creater').hide();
}