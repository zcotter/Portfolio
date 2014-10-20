class AddRegistrationIdToBananagramsPlayers < ActiveRecord::Migration
  def change
    add_column :bananagrams_players, :registration_id, :string
  end
end
