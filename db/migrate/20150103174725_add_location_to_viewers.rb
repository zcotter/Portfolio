class AddLocationToViewers < ActiveRecord::Migration
  def change
    add_column :viewers, :country, :string
    add_column :viewers, :isp, :string
    add_column :viewers, :latitude, :decimal
    add_column :viewers, :longitude, :decimal
  end
end
