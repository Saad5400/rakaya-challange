<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case CreateBook = 'create_book';
    case UpdateBook = 'update_book';
    case DeleteBook = 'delete_book';
    case StockBook = 'stock_book';

    case BorrowBook = 'borrow_book';
    case ReturnBook = 'return_book';
}
