$(document).ready(function() {
    var i = 1;
    $('#add-row').click(function() {
        i++;
        $('#dynamic-table').append('<tr id="' + i + '"><td scope="row">' + i + '</td><td>{{Form::text($name='
            course_name[]
            ', $value = null, $attributes = array('
            class '=>'
            form - control '))}}</td><td>{{Form::date($name='
            affiliation_duration[]
            ', $value = null, $attributes = array('
            class '=>'
            form - control '))}}</td><td>{{Form::number($name='
            current_number_of_students[]
            ', $value = null, $attributes = array('
            class '=>'
            form - control '))}}</td><td><button type="button" name="remove" id="btn' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        var row_id = button_id.substring(3);
        $('#' + row_id).remove();
        var rows = $('#dynamic-table').find('tr');
        console.log(rows);
        for (var j = 1; j < rows.length; j++) {
            var id = rows[j].id;
            if (parseInt(row_id) < parseInt(id)) {
                rows[j].id = (id - 1).toString();
                rows[j].firstChild.innerHTML = rows[j].id;
                rows[j].lastChild.firstChild.id = "btn" + rows[j].id;
            }
        }
        i--;
    });
});