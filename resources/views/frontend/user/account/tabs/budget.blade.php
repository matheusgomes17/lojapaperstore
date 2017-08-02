<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Orçamento</th>
            <th>Itens</th>
            <th>Status</th>
            <th>Funcionário</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($logged_in_user->budgets as $budget)
        <tr>
            <td>#{{ $budget->id }}</td>
            <td>
                <ul>
                    @foreach ($budget->items as $item)
                    <li>{{ $item->products->name }}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                @if ($budget->status == 1)
                    <span class="label label-warning">Pendente</span>
                @else 
                    <span class="label label-success">Respondido</span>
                @endif
            </td>
            <td>
                @if ($budget->manager_id != null)
                    {{ $budget->users->name }}
                @else
                    ------------
                @endif
            </td>
            <td>
                @if ($budget->status == 0)
                    <a href="{{ route('frontend.user.budget', ['id' => $budget->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Você ainda não criou nenhum orçamento.</td>
        </tr>
        @endforelse
    </tbody>
</table>