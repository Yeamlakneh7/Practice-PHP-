<?php require("views/partials/head.php"); ?>
<?php require("views/partials/nav.php"); ?>
<?php require("views/partials/banner.php"); ?>

<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<div class="md:grid md:grid-cols-2 md:gap-6">

<form method="POST">
  <div class="space-y-12 x-12 max-w-lg mx-auto">
    <div class="">
      <div class="mt-10 grid grid-cols-3 gap-3 sm:grid-cols-6">
        

        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900">Note</label>
          <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Here is an idea for note..."><?= isset($_POST['body']) && isset($error['body']) ? $_POST['body'] : '' ?></textarea>
          </div>

          <?php if (isset($error['body'])) : ?>
            <p class="text-red-500 mt-2 text-xs"><?= $error['body'] ?></p>
          <?php endif; ?>

        </div>

        
      </div>
    </div>

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6 max-w-lg mx-auto">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</div>


</div>
</main>


<?php require("views/partials/footer.php"); ?>