<h2>Create a new Note</h2>
<?php echo $this->form->create($note, array(
    'id' => 'note-create-form'
)) ?>
<?php echo $this->form->field('name') ?>
<?php echo $this->form->field('title') ?>
<?php echo $this->form->field('description', array(
    'type' => 'textarea'
)) ?>
<?php echo $this->html->link('Include my Location', '#', array(
    'class' => 'add-location'
)) ?>
<?php echo $this->form->submit('Create!') ?>
<?php echo $this->form->end() ?>
<?php echo $this->html->link('Cancel', '/') ?>

<script type="text/javascript">
$(function() {
    var $form = $('#note-create-form');
    var $link = $('.add-location', $form);

    $link.click(function(event) {
            var success = function(pos) {
                $link.remove();
                $('<input name="location[longitude]" type="hidden">')
                    .val(pos.coords.longitude)
                    .appendTo($form);
                $('<input name="location[latitude]" type="hidden">')
                    .val(pos.coords.latitude)
                    .appendTo($form);

                $form.append('<p>Your location will be included in this Note');
            };
            var error = function(msg) {
                alert('Could get location: ' + msg);
            };
            navigator.geolocation.getCurrentPosition(success, error);
            event.preventDefault();
        });
})
</script>