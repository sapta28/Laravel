<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsumsibulananResource\Pages;
use App\Filament\Resources\KonsumsibulananResource\RelationManagers;
use App\Models\Konsumsibulanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsumsibulananResource extends Resource
{
    protected static ?string $model = Konsumsibulanan::class;

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
                Forms\Components\TextInput::make('meter_awal')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('meter_akhir')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_pemakaian')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_input')
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
                Tables\Columns\TextColumn::make('meter_awal')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('meter_akhir')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_pemakaian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_input')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListKonsumsibulanans::route('/'),
            'create' => Pages\CreateKonsumsibulanan::route('/create'),
            'edit' => Pages\EditKonsumsibulanan::route('/{record}/edit'),
        ];
    }
}
