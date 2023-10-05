<div class="wrap">
    <div class="flex flex-row w-full h-16 items-center">
        <h2 class="font-bold text-3xl text-black pl-8">Settings</h2>
    </div>

    <?php echo $message; ?>

    <form action="" method="post" class="bg-white p-6 mt-3 mb-6 rounded-md shadow-md text-lg">
        <div class="flex flex-col mb-4">
            <label for="email" class="text-lg font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $email; ?>">
        </div>
        <div class="flex flex-col mb-4">
            <label for="password" class="text-lg font-bold mb-2">Password</label>
            <input type="password" name="password" id="password" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $password; ?>">
        </div>
        <div class="flex flex-col mb-4">
            <label for="imap_host" class="text-lg font-bold mb-2">IMAP Host</label>
            <input type="text" name="imap_host" id="imap_host" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $imap_host; ?>">
        </div>

        <div class="flex flex-col mb-4">
            <label for="imap_port" class="text-lg font-bold mb-2">IMAP Port</label>
            <input type="number" name="imap_port" id="imap_port" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $imap_port; ?>">
        </div>

        <div class="flex flex-col mb-4">
            <label for="smtp_host" class="text-lg font-bold mb-2">SMTP Host</label>
            <input type="text" name="smtp_host" id="smtp_host" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $smtp_host; ?>">
        </div>

        <div class="flex flex-col mb-4">
            <label for="smtp_port" class="text-lg font-bold mb-2">SMTP Port</label>
            <input type="number" name="smtp_port" id="smtp_port" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $smtp_port; ?>">
        </div>



        <div class="flex flex-col mb-4">
            <label for="encryption" class="text-lg font-bold mb-2">Encryption</label>
            <input type="text" name="encryption" id="encryption" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $encryption; ?>">
        </div>
        <div class="flex flex-col mb-4">
            <label for="name" class="text-lg font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" class="border-2 border-gray-300 focus:border-blue-500 rounded-md p-2 w-full" value="<?php echo $name; ?>">
        </div>

        <!-- submit nonce -->
        <?php wp_nonce_field('submit_settings', 'submit_settings_nonce'); ?>
        <div class="flex flex-col mt-4">
            <input name="submit_settings" type="submit" value="Save" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md cursor-pointer">
        </div>
    </form>
</div>