<!-- BEGIN: Modal Content -->
<x-base.dialog wire:ignore.self id="header-footer-modal-preview">
    <x-base.dialog.panel>
        <form wire:submit.prevent="save">
            <x-base.dialog.title>
                <h2 class="mr-auto text-base font-medium">
                    Add New Category
                </h2>
            </x-base.dialog.title>
            <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12 sm:col-span-12">
                    <x-base.form-label for="name">Name</x-base.form-label>
                    <x-base.form-input
                        id="name"
                        type="text"
                        name="name"
                        placeholder="Example"
                        wire:model="name"
                    />
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 sm:col-span-12">
                    <x-base.form-label for="status">Status</x-base.form-label>
                    <x-base.form-select id="status">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </x-base.form-select>
                </div>
            </x-base.dialog.description>
            <x-base.dialog.footer>
                <x-base.button
                    class="mr-1 w-20"
                    data-tw-dismiss="modal"
                    type="button"
                    variant="outline-secondary"
                >
                Cancel
                </x-base.button>
                <x-base.button
                    class="w-20"
                    type="button"
                    variant="primary"
                >
                Send
                </x-base.button>
            </x-base.dialog.footer>
        </form>
    </x-base.dialog.panel>
</x-base.dialog>
<!-- END: Modal Content -->