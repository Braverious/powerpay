<?php if ($this->session->flashdata('message_error')) : ?>
    <div class="mb-4 flex items-center justify-between rounded-lg bg-red-100 p-4 text-sm text-red-700" role="alert">
        <span><?= $this->session->flashdata('message_error'); ?></span>
        <button onclick="this.parentElement.style.display='none'" class="font-semibold text-red-800 hover:text-red-900">&times;</button>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('message_success')) : ?>
    <div class="mb-4 flex items-center justify-between rounded-lg bg-green-100 p-4 text-sm text-green-700" role="alert">
        <span><?= $this->session->flashdata('message_success'); ?></span>
        <button onclick="this.parentElement.style.display='none'" class="font-semibold text-green-800 hover:text-green-900">&times;</button>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('message_info')) : ?>
    <div class="mb-4 flex items-center justify-between rounded-lg bg-blue-100 p-4 text-sm text-blue-700" role="alert">
        <span><?= $this->session->flashdata('message_info'); ?></span>
        <button onclick="this.parentElement.style.display='none'" class="font-semibold text-blue-800 hover:text-blue-900">&times;</button>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('message_warning')) : ?>
    <div class="mb-4 flex items-center justify-between rounded-lg bg-yellow-100 p-4 text-sm text-yellow-700" role="alert">
        <span><?= $this->session->flashdata('message_warning'); ?></span>
        <button onclick="this.parentElement.style.display='none'" class="font-semibold text-yellow-800 hover:text-yellow-900">&times;</button>
    </div>
<?php endif; ?>