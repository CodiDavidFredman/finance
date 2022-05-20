<?php include_once $_SERVER['DOCUMENT_ROOT']."/controler/form/operation.php"; ?>
<div class="title"><?=$lung['title'];?> <span class="close_form">X</span></div>
<!-- action="/function/addOperation.php" -->
<form name='consumption'  method="get">
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
        <input type="number" name="sum" id="sum" placeholder="<?= $lung['sum'];?>"> 
    </div>
    <?php endif;?>
    <?php if($val === "counterparty"):?>
    <div class="line-form">
        <input required value="<?=$today;?>" name="date_send" type="date">
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
        <input required value="<?=$today;?>" name="date_add" type="date">
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
                    <textarea name="comments" placeholder="<?=$lung['text_comments'];?>"></textarea>
                </div>
    </div>
    
    
    <button type="submit"> Відправити</button>
    <div class="error-block"></div>
</form>