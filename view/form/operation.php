<?php include_once $_SERVER['DOCUMENT_ROOT']."/controler/form/operation.php"; ?>
<div class="title"><?=$lung['title'];?> <span class="close_form">X</span></div>
<!-- action="/function/addOperation.php" -->
<form name='consumption' id="consumption"  method="get">
    <input hidden name="type_operation" id="type_operation" value="pluse">
    <?php foreach($data as $val => $inputs):?>
    <div class="line-form">
        <!--<label for="<?=$val;?>"><?=$lung[$val];?></label>-->
        <select style="width:320px;" required name="<?=$val;?>" id="<?=$val;?>">
            <option label disabled selected ><?=$lung[$val];?></option>
            <?php foreach($inputs as $input):?>
            <option value="<?=$input['id']?>" ><?=$input['name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <?php if($val === "wallets"):?>
    <div class="line-form">
        <!--<label for="sum"><?= $lung['sum'];?></label>-->
        <input type="number" name="summ" id="summ" placeholder="<?= $lung['sum'];?>"> 
    </div>
    <?php endif;?>
    <?php if($val === "counterparty"):?>
    <div class="line-form">
        <input required value="<?=$today;?>" id="date_send" name="date_send" type="date">
    </div>
    <div class="date-deal">
        <span class="icon">
            <img src="/app/image/payment-calendar.svg" alt="calendar">
        </span>
        <span class="text_date_deal"><?=$lung['text_date_deal']?></span>
        <span class="clouse">
            <img src="/app/image/payment-question.svg" alt="clouse">
        </span>
    </div>
    <div class="line-form change_date">
        <input required value="<?=$today;?>" name="date_add" id="date_add" type="date">
    </div>
    <?php endif;?>
    <?php endforeach;?>
    <div class="add-second-level">
        <span class="icon">
            <img src="/app/image/more.svg" alt="more">
        </span>
        <span class="text_date_deal"><?=$lung['add_project']?></span>
        <span class="clouse">
            
        </span>
    </div>
    <div class="second-level" style="display:none">
        <?php foreach($data_second_level as $val => $inputs):?>
            
            <div class="line-form">
                <select style="width:320px;" required name="<?=$val;?>" id="<?=$val;?>">
                    <option label disabled selected ><?=$lung[$val];?></option>
                    <?php foreach($inputs as $input):?>
                    <option value="<?=$input['id']?>" ><?=$input['name']?></option>
                    <?php endforeach;?>
                </select>
            </div>
        <?php endforeach;?>
                <div class="line-form">
                    <textarea name="comments" id="comments" placeholder="<?=$lung['text_comments'];?>"></textarea>
                </div>
    </div>
    
    
    <button id="addOperation" type="button"> Відправити</button>
<<<<<<< HEAD
</form>

=======
    <div class="error-block"></div>
</form>


>>>>>>> 62d591ca757934513784f6cbc8b03370295a9f91
<script>
    if($(document).ready){
        $("#addOperation").on('click',function(){
        let wallets = $("#wallets").val();
        let summ = $("#summ").val(); 
        let category = $("#category").val(); 
        let counterparty = $("#counterparty").val(); 
        let consumable_services = $("#consumable_services").val();
        let date_send = $("#date_send").val(); 
        let date_add = $("#date_add").val(); 
        let project = $("#project").val(); 
        let points = $("#points").val(); 
        let comments = $("#comments").val(); 
        let type_operation = $("#type_operation").val();

        $.ajax({
            type: "GET",
            url: "/function/addOperation.php",
            cache: 'false',
            data: {  
                'wallets': wallets,
                'category': category,
                'summ': summ,
                'counterparty': counterparty,
                'consumable_services': consumable_services,
                'points': points,
                'project': project,
                'date_send': date_send,
                'date_add': date_add,
                'comments': comments,
                'type_operation': type_operation,
                },
            dataType: 'html',
            beforeSend: function(){
                $("#addOperation").prop("disabled", true);
            },
            success: function(data){
                result = $.parseJSON(data);
<<<<<<< HEAD

                function timerBlock(value, element, className) {
                    let timer = setInterval(() => {
                        value
                        element.addClass(className)
                        element.addClass('open')
                    })

                    setTimeout(() => {
                        clearInterval(timer)
                        element.removeClass(className)
                        element.removeClass('open')
                    }, 3000);
                }

                if(result.status === "done"){
                    timerBlock(
                        $(".error-block").html("форма отправленна"),
                        $(".error-block"),
                        'done'
                    )
                }else{
                    timerBlock(
                        $(".error-block").html(result.status),
                        $(".error-block"),
                        'mistake'
                    )
=======
                if(result.status === "done"){
                    $(".error-block").html("форма отправленна");
                }else{
                    $(".error-block").html(result.status);
>>>>>>> 62d591ca757934513784f6cbc8b03370295a9f91
                }
                $('#consumption')[0].reset();
                $("#addOperation").prop("disabled", false);

            }
        });
    })
}; 

<<<<<<< HEAD

=======
>>>>>>> 62d591ca757934513784f6cbc8b03370295a9f91
</script>