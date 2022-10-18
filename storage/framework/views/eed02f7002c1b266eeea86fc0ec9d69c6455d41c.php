<div style="position: fixed; float:right; top:0.5em; right: 0; width: 10%; height:10px;">
    <div class="js">
        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
            <form action="" class="language-picker__form">
                <label for="language-picker-select">Select your language</label>
                <select name="language-picker-select" id="language-picker-select">
                    <option lang="fr" value="fr" <?php echo e(Session::get('locale') == 'fr' ? 'selected' : ''); ?>>Français</option>
                    <option lang="en" value="en" <?php echo e(Session::get('locale') == 'en' ? 'selected' : ''); ?>>English</option>
                    <option lang="ru" value="ru" <?php echo e(Session::get('locale') == 'ru' ? 'selected' : ''); ?>>Russe</option>
                    <option lang="zh" value="zh" <?php echo e(Session::get('locale') == 'zh' ? 'selected' : ''); ?>>Chinese</option>
                </select>
            </form>
        </div></div>
        
</div>

<?php /**PATH /Users/mac/Downloads/www/resources/views/common/lang.blade.php ENDPATH**/ ?>