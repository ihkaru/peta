<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandmarkResource\Pages;
use App\Filament\Resources\LandmarkResource\RelationManagers;
use App\Models\Landmark;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandmarkResource extends Resource
{
    protected static ?string $model = Landmark::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_prov')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_kabkot')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_kecamatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_desa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_desa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('foto_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('long')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_prov')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_kabkot')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('long')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lat')
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
            'index' => Pages\ListLandmarks::route('/'),
            'create' => Pages\CreateLandmark::route('/create'),
            'edit' => Pages\EditLandmark::route('/{record}/edit'),
        ];
    }
}
