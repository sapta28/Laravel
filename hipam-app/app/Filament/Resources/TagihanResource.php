<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagihanResource\Pages;
use App\Filament\Resources\TagihanResource\RelationManagers;
use App\Models\Tagihan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TagihanResource extends Resource
{
    protected static ?string $model = Tagihan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('bulan_tahun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_pemakaian')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tarif_per_m3')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_tagihan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status_pembayaran')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_pemakaian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tarif_per_m3')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_tagihan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pembayaran'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTagihans::route('/'),
            'create' => Pages\CreateTagihan::route('/create'),
            'edit' => Pages\EditTagihan::route('/{record}/edit'),
        ];
    }
}
