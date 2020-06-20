<div class="form_container">
    <h5 class="form_head">НАПИШИ МНЕ</h5>
        <form class="form" action="index.php" method="POST">
            <label class="input_title" for="input_name">
                Ваше имя
                <span>*</span>
                <span>
                    <?php echo (isset($args['name_error_msg'])) ? $args['name_error_msg'] : ''; ?>
                </span>
            </label> <br />
            <input class="input_text" id="input_name" type="text" name="name" value="<?php echo $args['name'] ?? ''; ?>" /> <br />
            <label class="input_title" for="input_email">
                Ваш email
                <span>*</span>
                <span>
                    <?php echo (isset($args['email_error_msg'])) ? $args['email_error_msg'] : ''; ?>
                </span>
            </label> <br />
            <input class="input_text" id="input_email" type="text" name="email" value="<?php echo $args['email'] ?? ''; ?>" /> <br />
            <label class="input_title" for="input_country">
                Откуда вы?
            </label> <br />
            <select class="input_text country" id="input_country" name="country" >
                <option>—</option>
                <option <?php if ($args['country'] == 'Белоруссия'): echo 'selected'; endif; ?> >Белоруссия</option>
                <option <?php if ($args['country'] == 'Казахстан'): echo 'selected'; endif; ?> >Казахстан</option>
                <option <?php if ($args['country'] == 'Россия'): echo 'selected'; endif; ?> >Россия</option>
                <option <?php if ($args['country'] == 'Украина'): echo 'selected'; endif; ?> >Украина</option>
            </select> <br />
            <label class="input_title">Ваш пол</label> <br />
            <input type="radio" name="gender" value="man" <?php if ($args['gender'] == 'мужской'): echo 'checked'; endif; ?> >
            <label class="input_text gender">Мужской</label>
            <input type="radio" name="gender" value="woman" <?php if ($args['gender'] == 'женский'): echo 'checked'; endif; ?> >
            <label class="input_text gender">Женский</label> <br />
            <label class="input_title your_message" for="input_message">
                Ваше сообщение
                <span>*</span>
                <span><?php echo (isset($args['message_error_msg'])) ? $args['message_error_msg'] : ''; ?></span>
            </label> <br />
            <textarea id="input_message" class="input_text message_text" name="message" ><?php echo $args['message'] ?? ''; ?></textarea> <br />
            <input type="submit" class="movie_button submit_button">
            <p class="final_message">
                <?php 
                if (isset($args['success'])) 
                    echo $args['success'] ? '<font color="#357c20">Отправлено</font>' : '<font color="red">Данные введены некоректно</font>'; 
                ?>   
            </p>

        </form>

</div>