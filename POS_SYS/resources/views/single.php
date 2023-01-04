<div class="my-5">
    <!-- for public -->
    <h1 class="text-center mb-5">
        <?= $data->item->name ?>
    </h1>

    <?php if (!empty($data->item->author)) : ?>
        <p class="mb-3">
            Author: <?= $data->item->author ?>
        </p>
    <?php endif; ?>

    <p class="mb-3">
        Created: <?= $data->item->created_at ?>
    </p>

    <p class="mb-3">
        Tags: <?php
                foreach ($data->item->transactions as $transaction) {
                    echo "#$transaction ";
                }
                ?>
    </p>

    <p>
        <?= $data->item->content ?>
    </p>
</div>