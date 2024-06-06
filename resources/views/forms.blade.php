<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Formularios
        </h2>
    </x-slot>

    <x-container class="py-12">
        <form action="{{ route('forms.store') }}" method="POST">
            @csrf

            <x-errors class="mb-4"/>

            <x-card title="Formulario de Componentes">

                <x-slot name="action">
                    <x-button type="submit" primary>+ Agrgar</x-button>
                </x-slot>

                <div class="mb-4">
                    <x-input
                        name="name"
                        right-icon="user-circle"
                        label="Nombre"
                        hint="*Informacion relevante"
                        corner-hint="Ejm: Julio Cornielly"
                        placeholder="your name"
                    />
                </div>

                <div class="mb-4">

                    <x-input class="pl-[4.3rem]"
                    name="website"
                    label="Sitio Web"
                    prefix="https://"
                    placeholder="tu-sitio-web"
                    />
                </div>

                <div class="mb-4">
                    <x-input
                    label="Email"
                    suffix="@gmail.com"
                    placeholder="Correo Electronico"
                    class="pr-40"
                    />
                </div>

                <div class="mb-4">
                    <x-input
                        class="pl-16"
                        placeholder="password"
                    >
                        <x-slot name="prepend">
                            <div class="absolute inset-y-0">
                                <x-button
                                    icon="lock-closed"
                                    primary
                                    class="h-full"
                                ></x-button>
                            </div>
                        </x-slot>
                    </x-input>
                </div>

                <div class="mb-4">
                    <x-input
                        class="pr-16"
                        placeholder="password"
                    >
                        <x-slot name="append">
                            <div class="absolute inset-y-0 right-0">
                                <x-button
                                    icon="lock-closed"
                                    primary
                                    class="h-full"
                                />
                            </div>
                        </x-slot>
                    </x-input>
                </div>

                <div class="mb-4">
                    <x-inputs.password
                        label="Password"
                        placeholder="Escriba un password"
                    />
                </div>

                {{-- Input type number --}}
                <div class="mb-4">
                    <x-inputs.number
                        label="Edad"
                        placeholder="0"
                    />
                </div>

                {{-- Text Area --}}
                <div class="mb-4">
                    <x-textarea
                        label="Comentario"
                        placeholder="Escriba su comnetario"
                    />
                </div>

                {{-- Select Nativo --}}
                <div class="mb-4">
                    <x-native-select
                        label="Paises"
                        name="countries"
                        :options="[
                            [
                                'id' => 1,
                                'name' => 'Peru',
                            ],
                            [
                                'id' => 2,
                                'name' => 'Argentina',
                            ],
                            [
                                'id' => 3,
                                'name' => 'Venezula',
                            ],
                        ]"
                        placeholder="Seleccione un pais"
                        option-label='name'
                        option-value='id'
                    />
                </div>

                {{-- Select Optional --}}
                <div class="mb-4">
                    <x-select
                        label="Ciudades"
                        :options="[
                            [
                                'id' => 1,
                                'name' => 'Caracas',
                                'description' => 'abc'
                            ],
                            [
                                'id' => 2,
                                'name' => 'Valencia',
                                'description' => 'abc'
                            ],
                            [
                                'id' => 3,
                                'name' => 'Barquisimeto',
                                'description' => 'abc'
                            ],
                        ]"
                        option-label='name'
                        option-value='id'
                        placeholder='Seleccione una Ciudad'
                    />
                </div>
                {{-- Option Ciudades --}}
                <div class="mb-4">
                    <x-select
                        label="Ciudades 2"
                        placeholder='Seleccione una Ciudad'
                    >
                    <x-select.option class="option" value=1>Venezuela</x-select.option>
                    <x-select.option class="option" value=2>Peru</x-select.option>
                    <x-select.option class="option" value=1>Argentina</x-select.option>
                </x-select>
                </div>
                {{-- Select User --}}
                <div class="mb-4">
                    <x-select
                        name="users[]"
                        label="Userios"
                        placeholder='Seleccione un Usuario'
                        :async-data="route('api.users.index')"
                        option-label='name'
                        option-value='id'
                        multiselect
                        :template="[
                            'name' => 'user-option',
                            'config' => [
                                'src' => 'profile_photo_url',
                            ]
                        ]"
                    ></x-select>
                </div>

                <div class="mb-4">
                    <x-color-picker
                    label="Color"
                    placeholder="Seleccione un color"
                    :colors="[
                        ['name' => 'White', 'value' => '#fff'],
                        ['name' => 'Black', 'value' => '#000'],
                        ['name' => 'Red', 'value' => '#ef4444'],
                    ]"
                    >
                    </x-color-picker>
                </div>

                <x-slot name="footer">
                    <x-button type="submit" secundary>Guardar</x-button>
                </x-slot>
            </x-cards>



        </form>
    </x-container>
</x-app-layout>
