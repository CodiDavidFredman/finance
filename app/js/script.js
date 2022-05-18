$("#add_income").click(function(){
   $("section.form").css("display","flex");
});


// перебираем форму для отправки данных
function form (){
   let consumption = document.forms.consumption;
   let arr = [];
      for(let i=0;i<consumption.length;i++){
            if(consumption[i].localName ==="select"){
               arr.push('#' + consumption[i].id);
            };
      };
   return arr;
}
// обролюємо форми та добовляємо пошук по select
function updateForm(arr){
   for(let i=0;i<arr.length;i++){
      $(document).ready(function() {
         $(`${arr[i]}`).select2();
      });
   }
}
updateForm(form());