<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="fas fa-file-invoice"></i>
        <p>
            Invoice
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{ route('invoice-list') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>invoices list</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>paid invoices</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unpaid invoices</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/uplot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Partially paid invoices</p>
            </a>
        </li>
    </ul>
</li>
