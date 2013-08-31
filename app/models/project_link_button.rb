class ProjectLinkButton < ActiveRecord::Base
  attr_accessible :link, :name
  belongs_to :project
end
