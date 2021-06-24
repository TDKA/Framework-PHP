<div class="container mt-5 py-5">

    <h1><?php echo $message?></h1>
    <h3><?php echo $messageChange?></h3>

    <form action="index.php?controller=home&task=index" method="post" class="row">
    
        <div class="form-group col-md-4">
                <textarea class="form-control" name="messageChange" placeholder="Add new message here" cols="30" rows="5"></textarea>
        </div>
    
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-success">Change</button>
        </div>
    
    </form>

    <ul class="mt-4">

        <li>1-</li>
        <li>2-</li>
        <li>3-</li>
        <li>4-</li>
        <li>5-</li>
    
    </ul>

</div>