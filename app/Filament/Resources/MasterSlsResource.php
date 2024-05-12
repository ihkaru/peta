<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasterSlsResource\Pages;
use App\Filament\Resources\MasterSlsResource\RelationManagers;
use App\Models\MasterSls;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasterSlsResource extends Resource
{
    protected static ?string $model = MasterSls::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_prov')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_kabkot')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_kec')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_des_kel')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('provins')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kabkot')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('des_kel')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_prov')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_kabkot')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_kec')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_des_kel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provins')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabkot')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('des_kel')
                    ->searchable(),
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
            'index' => Pages\ListMasterSls::route('/'),
            'create' => Pages\CreateMasterSls::route('/create'),
            'edit' => Pages\EditMasterSls::route('/{record}/edit'),
        ];
    }
}
