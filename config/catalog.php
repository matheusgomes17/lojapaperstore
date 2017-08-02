<?php

return [
    /*
     * Users table used to store users
     */
    'users_table' => 'users',

    /*
     * User model used by Access to create correct relations.
     * Update the user if it is in a different namespace.
    */
    'user' => Snaketec\Models\Access\User\User::class,

    /*
     * Products table used to store products
     */
    'products_table' => 'products',

    /*
     * Product model used by Catalog to create correct relations.
     * Update the product if it is in a different namespace.
    */
    'product' => Snaketec\Models\Catalog\Product\Product::class,

    /*
     * Categories table used to store categories
     */
    'categories_table' => 'categories',

    /*
     * Category model used by Catalog to create correct relations.
     * Update the category if it is in a different namespace.
    */
    'category' => Snaketec\Models\Catalog\Category\Category::class,

    /*
     * Budget table used to store budgets
     */
    'budgets_table' => 'budgets',

    /*
     * Budget model used by Catalog to create correct relations.
     * Update the budget if it is in a different namespace.
    */
    'budget' => Snaketec\Models\Catalog\Budget\Budget::class,

    /*
     * Budget table used to store budgets
     */
    'budgets_items_table' => 'budgets_items',

    /*
     * BudgetItem model used by Catalog to create correct relations.
     * Update the budget if it is in a different namespace.
    */
    'budget_item' => Snaketec\Models\Catalog\Budget\BudgetItem::class,

    /*
     * Budget table used to store budgets
     */
    'budgets_answers_table' => 'budgets_answers',

    /*
     * BudgetAnswer model used by Catalog to create correct relations.
     * Update the budget if it is in a different namespace.
    */
    'budget_answer' => Snaketec\Models\Catalog\Budget\BudgetAnswer::class,

];