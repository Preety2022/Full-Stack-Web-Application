function application(){
  jQuery('#instruction').hide();
  jQuery('#apply').show();
}

function applicationmca() {
  jQuery('#instruction').hide();
  jQuery('#applymca').show();
}

 function chek(){
      var a = document.getElementsByName('check');
      var b = 0;
      var count;
      for(count=0; count<a.length; count++){
        if(a[count].checked==true)
          b = b+1;
      }
      if(b>1){
        document.getElementById('notvalid').innerHTML="Please select only one"
        return false;
      }
 } 

/*load image in B.tech form*/
    function load(){

     const img= document.getElementById('inpimg');
     const input= document.getElementById('preview');
     const preimg = input.querySelector('.preimage');
     img.addEventListener("change", function(){
      const file = this.files[0];
      //console.log(file);

      const reader= new FileReader();
      reader.addEventListener("load",function(){
        preimg.setAttribute("src",this.result);               //this keyword points towards fileReader
      });
        reader.readAsDataURL(file);
     });
   }
    
    /*image load in mca form*/

   function loadm(){

     const img= document.getElementById('inpimgm');
     const input= document.getElementById('previewm');
     const preimg = input.querySelector('.preimage');
     img.addEventListener("change", function(){
      const file = this.files[0];
      //console.log(file);

      const reader= new FileReader();
      reader.addEventListener("load",function(){
        preimg.setAttribute("src",this.result);               //this keyword points towards fileReader
      });
        reader.readAsDataURL(file);
     });
   }
