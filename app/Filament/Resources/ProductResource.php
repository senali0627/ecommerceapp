<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Filament\Resources\Sections\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\ViewAction;

use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function (string $operation, $state, $set) {
                    if ($operation !== 'create') {
                        return;
                    }
                    $set('slug', Str::slug($state));
                }),

                Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(255)
                ->disabled()
                ->dehydrated()
                ->unique(Product::class, 'slug', ignoreRecord: true),


                Forms\Components\MarkdownEditor::make('description')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('products')
                        ->columns(2),
                

            
                Forms\Components\FileUpload::make('images')
                        ->multiple()
                        ->directory('products')
                        ->maxFiles(5)
                        ->reorderable()
                        ->columnSpan(1),
                

                Forms\Components\Card::make()
                ->schema([
                    
                            Forms\Components\TextInput::make('price')
                                ->required()
                                ->numeric()
                                ->prefix('Rs'),
                            
                        

                    
                            Forms\Components\Select::make('category_id')
                                ->required()
                                ->searchable()
                                ->relationship('category', 'name'),
                                
                            Toggle::make('in_stock')
                                ->required()
                                ->default(true)
                                ->label('In Stock'),
                    
                            Toggle::make('is_active')
                                ->required()
                                ->default(true)
                                ->label('Is Active'),
                    
                            Toggle::make('is_featured')
                                ->required()
                                ->default(false)
                                ->label('Is Featured'),

                             Toggle::make('on_sale')
                                ->required()
                                ->default(false)
                                ->label('On sale'),
                        
                        
                ])
                ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('name')
                ->searchable(),
            
    
            TextColumn::make('category.name')
                ->sortable(),
    
    
            TextColumn::make('price')
                ->money('LKR')
                ->sortable(),
    
            IconColumn::make('is_featured')
                ->boolean(),
    
            IconColumn::make('on_sale')
                ->boolean(),
    
            IconColumn::make('in_stock')
                ->boolean(),
    
            IconColumn::make('is_active')
                ->boolean(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name'),
            
                
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
