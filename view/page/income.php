<!-- <?php include_once $_SERVER['DOCUMENT_ROOT']."/controler/page/income.php"; ?> -->

<div class="title"><?=$lung['title'];?> <span class="close_form">X</span></div>
<form name='consumption' action="/function/addExpense.php" method="get">

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
        <span class="icon">calendar</span>
        <span class="text_date_deal"><?=$lung['text_date_deal']?></span>
        <span class="clouse">clouse</span>
    </div>
    <div class="line-form change_date">
        <input required value="<?=$today;?>" name="date_add" type="date">
    </div>
    <?php endif;?>
    <?php endforeach;?>
    
    <input type="submit">
</form>