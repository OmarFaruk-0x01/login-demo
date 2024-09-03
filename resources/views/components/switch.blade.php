@props([
    'name',
    'label',
    'id' => \Illuminate\Support\Str::random(5),
    'checked' => false,
    'disabled' => false,
])

<div
    class="flex items-center gap-2"
    x-data="{ checked: @js($checked) }"
>
    <button
        class="group relative isolate inline-flex h-6 w-10 cursor-default rounded-full p-[3px] sm:h-5 sm:w-8 transition duration-0 ease-in-out data-[changing]:duration-200 forced-colors:outline forced-colors:[--switch-bg:Highlight] dark:forced-colors:[--switch-bg:Highlight] bg-zinc-200 ring-1 ring-inset ring-black/5 dark:bg-white/5 dark:ring-white/15 data-[checked]:bg-[--switch-bg] data-[checked]:ring-[--switch-bg-ring] dark:data-[checked]:bg-[--switch-bg] dark:data-[checked]:ring-[--switch-bg-ring] focus:outline-none data-[focus]:outline data-[focus]:outline-2 data-[focus]:outline-offset-2 data-[focus]:outline-blue-500 data-[hover]:data-[checked]:ring-[--switch-bg-ring] data-[hover]:ring-black/15 dark:data-[hover]:data-[checked]:ring-[--switch-bg-ring] dark:data-[hover]:ring-white/25 data-[disabled]:bg-zinc-200 data-[disabled]:data-[checked]:bg-zinc-200 data-[disabled]:opacity-50 data-[disabled]:data-[checked]:ring-black/5 dark:data-[disabled]:bg-white/15 dark:data-[disabled]:data-[checked]:bg-white/15 dark:data-[disabled]:data-[checked]:ring-white/15 [--switch-bg-ring:theme(colors.zinc.950/90%)] [--switch-bg:theme(colors.zinc.900)] dark:[--switch-bg-ring:transparent] dark:[--switch-bg:theme(colors.white/25%)] [--switch-ring:theme(colors.zinc.950/90%)] [--switch-shadow:theme(colors.black/10%)] [--switch:white] dark:[--switch-ring:theme(colors.zinc.700/90%)]"
        id="{{ $id }}"
        role="switch"
        type="button"
        tabindex="0"
        aria-checked="{{ $checked }}"
        aria-labelledby="{{ $id }}"
        @click="checked = ! checked"
        x-bind:data-checked="checked"
    >
        <span
            aria-hidden="true"
            class="pointer-events-none relative inline-block size-[1.125rem] rounded-full sm:size-3.5 translate-x-0 transition duration-200 ease-in-out border border-transparent bg-white shadow ring-1 ring-black/5 group-data-[checked]:bg-[--switch] group-data-[checked]:shadow-[--switch-shadow] group-data-[checked]:ring-[--switch-ring] group-data-[checked]:translate-x-4 sm:group-data-[checked]:translate-x-3 group-data-[disabled]:group-data-[checked]:bg-white group-data-[disabled]:group-data-[checked]:shadow group-data-[disabled]:group-data-[checked]:ring-black/5"
        ></span>
    </button>
    <label
        class="select-none text-base/6 text-zinc-950 data-[disabled]:opacity-50 sm:text-sm/6 dark:text-white"
        for="headlessui-control-:R5m6kvajta:"
    >
        {{ $label }}
    </label>
    <div
        hidden=""
        style="position: fixed;top: 1px;left: 1px;width: 1px;height: 0px;padding: 0px;margin: -1px;overflow: hidden;clip: rect(0px, 0px, 0px, 0px);white-space: nowrap;border-width: 0px;display: none;"
    >
        <input
            hidden=""
            readonly=""
            type="hidden"
            style="position: fixed;top: 1px;left: 1px;width: 1px;height: 0px;padding: 0px;margin: -1px;overflow: hidden;clip: rect(0px, 0px, 0px, 0px);white-space: nowrap;border-width: 0px;display: none;"
        />
        <input
            hidden=""
            readonly=""
            type="checkbox"
            value="on"
            name="{{ $name }}"
            style="position: fixed;top: 1px;left: 1px;width: 1px;height: 0px;padding: 0px;margin: -1px;overflow: hidden;clip: rect(0px, 0px, 0px, 0px);white-space: nowrap;border-width: 0px;display: none;"
        />
    </div>
</div>
