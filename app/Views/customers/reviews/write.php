<?= $this->extend('themes\littlegreenery\template'); ?>

<?= $this->section('konten'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tulis Review</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                        <li class="breadcrumb-item"><?php echo anchor('customer_reviews', 'Review'); ?></li>
                        <li class="breadcrumb-item active">Tulis Review</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">
            <?php echo form_open('customer_reviews/write_me'); ?>
            <?php $validation = \Config\Services::validation() ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Review</label>
                    <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control" id="title" required>
                    <div class="form-error text-danger font-weight-bold"> <?= $validation->getError('title'); ?></div>
                </div>

                <div class="form-group">
                    <label for="orders" class="form-control-label">Order:</label>
                    <select name="order_id" class="form-control" id="orders">
                        <?php if (count($orders) > 0) : ?>
                            <?php foreach ($orders as $order) : ?>
                                <option value="<?php echo $order->id; ?>" <?php echo set_select('order_id', $order->id); ?>)>#<?php echo $order->order_number; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="review" class="form-control-label">Review</label>
                    <textarea name="review" class="form-control" id="review" required><?php echo set_value('review'); ?></textarea>
                    <div class="form-error text-danger font-weight-bold"> <?= $validation->getError('review'); ?></div>
                </div>

            </div>
            <div class="card-footer">
                <input type="submit" value="Tulis Review" class="btn btn-primary">
            </div>
            </form>
        </div>
    </section>

</div>
<?= $this->endSection(); ?>