
    $('#btn').click(()=>{

        // start for data insert 
        var fname = $('#fname').val();
        var age = $('#age').val();
        var city = $('#city').val();
        $.ajax({
            url: 'insert.php',
            data: {
                fname: fname,
                age: age,
                city: city
            },
            method: 'post',
            success: function(data) {
                read();
            }
        });

        // end for data insert 
    });

    // start for read data
    function read() {
        var read = '';
        $.ajax({
            method: 'post',
            url: 'read.php',
            data: {read: read},
            success: function(data) {
                $('#tBody').html(data);
            }
        });
    }
    // end for read data 

    // start for delete
    function Delete(userId) {
        // alert(userId);
        $con = confirm('Are you sure? ');
        if($con == true) {
            $.ajax({
                method: 'POST',
                url: 'delete.php',
                data: {userId: userId},
                success: function(data) {
                    read();
                }
            });
        }
    } 
    // end for delete 

    // start for edit
    function Edit(userId){
        // alert(userId);
        $.ajax({
            method: 'POST',
            url: 'edit.php',
            data: {
                userId: userId
            },
            success: function(data) {
                $('body').html(data);
            }
        });
    } 
    // end for edit 

    // start for update data 
    function UPDATE_DATA(userId) {
        var fname = $('#fname').val();
        var age = $('#age').val();
        var city = $('#city').val();

        $.ajax({
            method: 'POST',
            url: 'update.php',
            data: {
                fname: fname,
                age: age,
                city: city,
                userId: userId
            },
            success: function(data){
                alert(data);
            }
        });
    }
    // end for update data 

    // start for read all
    $('#read').click(()=>{
        var read = '';
        $.ajax({
            method: 'post',
            url: 'read.php',
            data: {read: read},
            success: function(data) {
                $('#tBody').html(data);
            }
        });
    });
    // end for read all 

    // edit home back 
    function editHome() {
        var read = '';
        $.ajax({
            method: 'post',
            url: 'index.php',
            data: {read: read},
            success: function(data) {
                $('body').html(data);
            }
        });
    }
    // edit home back 