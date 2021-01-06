<div class="table-responsive">
    <table class="table" id="dhs_batches-table">
        <thead>
            <tr>
                <th class="text-center">Batch</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckBatches as $sisdeckBatch)
            <tr>
                <td>{{ $sisdeckBatch->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeckBatches.destroy', $sisdeckBatch->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.batches.show', [$sisdeckBatch->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye-open"></i></a>
                        <a href="{{ route('sisdeck.batches.edit', [$sisdeckBatch->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
