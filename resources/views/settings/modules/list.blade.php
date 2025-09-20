<x-app-layout>
    <x-module-section>
        <table class="w-full">
            <thead class=" border-b-2">
            <th>
                Name
            </th>
            <th>
                Prefix
            </th>
            <th>
                Action
            </th>
            <th>
                is Default
            </th>
            </thead>
            <tbody>
            @foreach($modules as $module)
                <tr class="border-b-2">
                    <td>{{$module->module_name}}</td>
                    <td>{{$module->module_prefix}}</td>
                    <td>
                        <x-table-actions
                            :modelId="$module"
                            :extraButtons="[
                                    [
                                        'route' => 'module.change_status',
                                        'text' => $module->is_active ? 'Deactivate' : 'Activate',
                                        'class' => $module->is_active ? 'bg-red-600' : 'bg-green-600 ' . 'text-white',
                                        'type' => 'submit'
                                    ],
                        ]"
                        />
                    </td>
                    <td>
                        <x-table-actions
                            :modelId="$module"
                            :extraButtons="[
                              [
                                        'route' => 'module.make_it_default',
                                        'text' => $module->is_landing_dashboard ? 'YES' : 'NO',
                                        'class' => $module->is_landing_dashboard ? 'bg-green-600' : 'bg-red-600',
                                        'type' => 'submit'
                                    ]
                        ]"
                        />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-module-section>
</x-app-layout>
