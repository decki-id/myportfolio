<div class="table-responsive">
    <table class="table" id="sisdeckTransactions-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Fee Id</th>
        <th>User Id</th>
        <th>Paid</th>
        <th>Transaction Date</th>
        <th>Remark</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sisdeckTransactions as $sisdeckTransaction)
            <tr>
                <td>{{ $sisdeckTransaction->student_id }}</td>
            <td>{{ $sisdeckTransaction->fee_id }}</td>
            <td>{{ $sisdeckTransaction->user_id }}</td>
            <td>{{ $sisdeckTransaction->paid }}</td>
            <td>{{ $sisdeckTransaction->transaction_date }}</td>
            <td>{{ $sisdeckTransaction->remark }}</td>
            <td>{{ $sisdeckTransaction->description }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeckTransactions.destroy', $sisdeckTransaction->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeckTransactions.show', [$sisdeckTransaction->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sisdeckTransactions.edit', [$sisdeckTransaction->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
