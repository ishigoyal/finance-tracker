<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.expense.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.expenses.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="expense_category_id"><?php echo e(trans('cruds.expense.fields.expense_category')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('expense_category') ? 'is-invalid' : ''); ?>" name="expense_category_id" id="expense_category_id">
                    <?php $__currentLoopData = $expense_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('expense_category_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('expense_category')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('expense_category')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.expense.fields.expense_category_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="entry_date"><?php echo e(trans('cruds.expense.fields.entry_date')); ?></label>
                <input class="form-control date <?php echo e($errors->has('entry_date') ? 'is-invalid' : ''); ?>" type="text" name="entry_date" id="entry_date" value="<?php echo e(old('entry_date')); ?>" required>
                <?php if($errors->has('entry_date')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('entry_date')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.expense.fields.entry_date_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="amount"><?php echo e(trans('cruds.expense.fields.amount')); ?></label>
                <input class="form-control <?php echo e($errors->has('amount') ? 'is-invalid' : ''); ?>" type="number" name="amount" id="amount" value="<?php echo e(old('amount', '')); ?>" step="0.01" required>
                <?php if($errors->has('amount')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('amount')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.expense.fields.amount_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="description"><?php echo e(trans('cruds.expense.fields.description')); ?></label>
                <input class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>" type="text" name="description" id="description" value="<?php echo e(old('description', '')); ?>">
                <?php if($errors->has('description')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.expense.fields.description_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECTS\lara10\storage\quickadminpanel\projects\expense_management\resources\views/admin/expenses/create.blade.php ENDPATH**/ ?>