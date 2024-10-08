<div :wire:key="student-list">
    <style>
        .QA_section.check_box_table .QA_table .table thead tr th:first-child, .QA_table .table tbody td:first-child {
            padding-left: 25px !important;
        }

        .QA_section.check_box_table .QA_table .table thead tr th {
            padding-left: 12px !important;
        }

        .QA_section .QA_table .table thead th {
            vertical-align: middle !important;
        }

        .QA_section .QA_table .org_student_table .table {
            min-height: 150px;
        }
    </style>


    <x-livewire-tables::wrapper :component="$this">
        @if ($this->hasConfigurableAreaFor('before-tools'))
            @include($this->getConfigurableAreaFor('before-tools'), $this->getParametersForConfigurableArea('before-tools'))
        @endif

        <div class="d-md-flex justify-content-between mb_15">
            <div class="d-md-flex">
                <div>
                    <div class=" btn-group" wire:ignore>
                        <select class="primary_select studentPositionSelect width_200" wire:model="type"
                                wire:change="selectType">
                            <option value="">{{__('org.Filter By Type')}}</option>
                            <option value="Video">Video</option>
                            <option value="Excel">Excel</option>
                            <option value="PPT">PPT</option>
                            <option value="Doc">Doc</option>
                            <option value="PDF">PDF</option>
                            <option value="SCORM">SCORM</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="d-md-flex">
                <div class=" btn-group">
                    @if (permissionCheck('org.material.store'))
                        <a class="primary-btn radius_30px mr-10 fix-gr-bg mt-10 line-height-19"
                           id="add_material_btn" href="#"><i
                                class="ti-plus"></i>{{__('org.Add Material')}}</a>
                    @endif
                    <a class="primary-btn radius_30px mr-10 fix-gr-bg mt-10  line-height-19"
                       href="{{route('org.material-source-export')}}"><i
                            class="ti-download"></i>{{__('org.Export Material')}}</a>
                    <div class="mr-10 fix-gr-bg mt-10  pe-3 ">


                    </div>

                </div>
            </div>

            <div class="d-md-flex">
                <div>
                    <x-livewire-tables::tools.toolbar/>
                </div>
            </div>

        </div>


        <x-livewire-tables::table>
            <x-slot name="thead">
                <x-livewire-tables::table.th.reorder/>
                <x-livewire-tables::table.th.bulk-actions/>
                <x-livewire-tables::table.th.row-contents/>
                @foreach($columns as $index => $column)
                    @continue($column->isHidden())
                    @continue($this->columnSelectIsEnabled() && ! $this->columnSelectIsEnabledForColumn($column))
                    @continue($this->currentlyReorderingIsDisabled() && $column->isReorderColumn() && $this->hideReorderColumnUnlessReorderingIsEnabled())

                    <x-livewire-tables::table.th :column="$column" :index="$index"/>
                @endforeach
            </x-slot>

            @if($this->secondaryHeaderIsEnabled() && $this->hasColumnsWithSecondaryHeader())
                <x-livewire-tables::table.tr.secondary-header :rows="$rows"/>
            @endif

            <x-livewire-tables::table.tr.bulk-actions :rows="$rows"/>

            @forelse ($rows as $rowIndex => $row)
                <x-livewire-tables::table.tr :row="$row" :rowIndex="$rowIndex">
                    <x-livewire-tables::table.td.reorder/>
                    <x-livewire-tables::table.td.bulk-actions :row="$row"/>
                    <x-livewire-tables::table.td.row-contents :rowIndex="$rowIndex"/>

                    @foreach($columns as $colIndex => $column)
                        @continue($column->isHidden())
                        @continue($this->columnSelectIsEnabled() && ! $this->columnSelectIsEnabledForColumn($column))
                        @continue($this->currentlyReorderingIsDisabled() && $column->isReorderColumn() && $this->hideReorderColumnUnlessReorderingIsEnabled())

                        <x-livewire-tables::table.td :column="$column" :colIndex="$colIndex">
                            {{ $column->renderContents($row) }}
                        </x-livewire-tables::table.td>
                    @endforeach
                </x-livewire-tables::table.tr>

                <x-livewire-tables::table.row-contents :row="$row" :rowIndex="$rowIndex"/>
            @empty
                <x-livewire-tables::table.empty/>
            @endforelse

            @if ($this->footerIsEnabled() && $this->hasColumnsWithFooter())
                <x-slot name="tfoot">
                    @if ($this->useHeaderAsFooterIsEnabled())
                        <x-livewire-tables::table.tr.secondary-header :rows="$rows"/>
                    @else
                        <x-livewire-tables::table.tr.footer :rows="$rows"/>
                    @endif
                </x-slot>
            @endif
        </x-livewire-tables::table>

        <x-livewire-tables::pagination :rows="$rows"/>

        @isset($customView)
            @include($customView)
        @endisset
    </x-livewire-tables::wrapper>

    <input type="hidden" id="showAddBtn" value=" {{$showAddBtn?'1':'0'}}">
    <input type="hidden" id="categories" value=" {{implode("|",$categories)}}">
    @push('js')

        <script>
            $(document).ready(function () {
                $('.primary_select').on('change', function (e) {
                    @this.
                    set('type', e.target.value);
                    @this.
                    selectType()
                });


                $('#add_material_btn').on('click', function (e) {
                    var showAddBtn = $('#showAddBtn').val();


                    if (showAddBtn == 1) {
                        var categories = $('#categories').val();
                        $('#addCategory').val(categories)
                        $('#add_material').modal('toggle');

                    } else {
                        toastr.error('Please Select a Category', 'Failed');
                    }
                });

            });
        </script>

    @endpush

    <script>


    </script>
</div>
