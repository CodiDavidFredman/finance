$("#add_income").click(function(){
   $("section.form").css("display","flex");
});
console.log("22");


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


// ПИШИ КОМЕНТАРІ щоб потім знати що воно робить
function formOpenDateDeal() {
   const dateDeal = document.querySelectorAll('.date-deal')

   dateDeal.forEach(item => {
      item.addEventListener('click', function() {
         this.style.display = 'none'
         document.querySelector('.change_date').style.display = 'block'
      })
   })
}

formOpenDateDeal()