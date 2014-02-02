/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.wunderlist;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author luigi
 */
@Entity
@Table(name = "subtask")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Subtask.findAll", query = "SELECT s FROM Subtask s"),
    @NamedQuery(name = "Subtask.findById", query = "SELECT s FROM Subtask s WHERE s.id = :id"),
    @NamedQuery(name = "Subtask.findByName", query = "SELECT s FROM Subtask s WHERE s.name = :name"),
    @NamedQuery(name = "Subtask.findByCompleted", query = "SELECT s FROM Subtask s WHERE s.completed = :completed")})
public class Subtask implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id")
    private Integer id;
    @Size(max = 45)
    @Column(name = "name")
    private String name;
    @Column(name = "completed")
    private Boolean completed;
    @JoinColumn(name = "task", referencedColumnName = "id")
    @ManyToOne(optional = false)
    private Task task;

    public Subtask() {
    }

    public Subtask(Integer id) {
        this.id = id;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Boolean getCompleted() {
        return completed;
    }

    public void setCompleted(Boolean completed) {
        this.completed = completed;
    }

    public Task getTask() {
        return task;
    }

    public void setTask(Task task) {
        this.task = task;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Subtask)) {
            return false;
        }
        Subtask other = (Subtask) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "com.wunderlist.Subtask[ id=" + id + " ]";
    }
    
}
