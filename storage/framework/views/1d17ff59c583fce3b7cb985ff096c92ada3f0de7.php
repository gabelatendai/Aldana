
<?php if(session('message')): ?>
    <div aria-live="polite" aria-atomic="true" style="position: relative;">
        <!-- Position it -->
    <div style="position: absolute; top: 0; right: 0;z-index: 1000;">
        <!-- Then put toasts within -->
        <div class="toast "  role="alert" aria-live="polite" aria-atomic="true" data-delay="3000" style="border-radius: 0;z-index: 1000">
            <div class="toast-header bg-success">
                <strong class="mr-auto text-white">Notification</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body text-secondary">
                <?php echo e(session('message')); ?>

            </div>
        </div>
    </div>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div aria-live="polite" aria-atomic="true" style="position: relative;">
        <!-- Position it -->
    <div style="position: absolute; top: 0; right: 0;z-index: 1000">
        <!-- Then put toasts within -->
        <div class="toast "role="alert" aria-live="polite" aria-atomic="true" data-delay="3000" style="border-radius: 0;z-index: 1000;">
            <div class="toast-header bg-danger">
                <strong class="mr-auto text-sm-center text-white">Notification</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body text-danger">
                <?php echo e(session('error')); ?>

            </div>
        </div>
    </div>
    </div>
<?php endif; ?>


<?php if(session('status')): ?>
    <div aria-live="polite" aria-atomic="true" style="position: relative;">
        <!-- Position it -->
        <div style="position: absolute; top: 50%; right: 30%;z-index: 1000;">
            <!-- Then put toasts within -->
            <div class="toast " role="alert" aria-live="polite" aria-atomic="true" data-delay="3000" style="border-radius: 0;z-index: 1000">
                <div class="toast-header bg-success">
                    <strong class="mr-auto text-white">Notification</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body text-secondary">
                    <?php echo e(session('status')); ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>